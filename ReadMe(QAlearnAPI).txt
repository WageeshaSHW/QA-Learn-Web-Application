QA-Bot AI Chatbot and OCR Model

This repository contains a Python Flask API app that features an AI chatbot and a ocr model. The app allows you to interact with the chatbot and utilize the OCR model for text predictions.

  Prerequisites

    - Anaconda  3 (or any Python environment)
    - The required environment should have the packages specified in the `requirements.txt` file.

  Setup

  *. Clone this repository to your local machine:

    git clone https://github.com/wageesha/Research.git
    cd your-repo

    *. Create a new Anaconda environment (if needed) and activate it:
            Anaconda download link:https://www.anaconda.com/download

    
        conda create -n your-env-name python= 3.6
        conda activate your-env-name

    *. Install the required packages using the provided requirements.txt:
    
        pip install -r requirements.txt

    *. Train the AI chatbot model by running train.py:
    
        python train.py
    *. Train the machine learning model by running modelTrain.py:
    
        python modelTrain.py

  Usage

    *.  Ensure the required packages are installed and the models are traine
    *. Run the Flask API app using app.py:
    
        python app.py
    *. Access the API endpoints to interact with the chatbot and use the machine learning   model.

  Customization

    - If you need to change the dataset for training, update the relevant files (train.py ), re-run the training scripts, and restart the Flask app.

    - Modify the code in app.py to add more API endpoints or functionalities as needed.


