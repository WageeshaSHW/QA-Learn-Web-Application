from flask import Flask, request, jsonify
import easyocr
from PIL import Image, ImageDraw
from collections import Counter

app = Flask(__name__)

reader = easyocr.Reader(['en'], gpu=False)

def draw_boxes(image, bounds, color='yellow', width=2):
    draw = ImageDraw.Draw(image)
    for bound in bounds:
        p0, p1, p2, p3 = bound[0]
        draw.line([*p0, *p1, *p2, *p3, *p0], fill=color, width=width)
    return image

@app.route('/imageUrl', methods=['POST'])
def process_image():
    try:
        image_url = request.json.get('imageUrl')
        if image_url:
            im = Image.open(image_url)
            bounds = reader.readtext(image_url)
            
            boxed_image = draw_boxes(im.copy(), bounds)
            boxed_image.save("boxed_image.jpg")
            
            num_texts = len(bounds)
            
            detected_texts = [{'text': text, 'bounding_box': box} for text, _, box in bounds]
            longest_text = max(bounds, key=lambda item: len(item[0]))[0]
            text_counter = Counter(text for text, _, _ in bounds)
            most_common_text, most_common_count = text_counter.most_common(1)[0]
            
            result = {
                'total_detected_texts': num_texts,
                'detected_texts': detected_texts,
                'longest_text': longest_text,
                'most_common_text': most_common_text,
                'most_common_text_count': most_common_count
            }
            
            return jsonify(result), 200
        else:
            return jsonify({'error': 'Missing imageUrl in request body'}), 400
    except Exception as e:
        return jsonify({'error': str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
