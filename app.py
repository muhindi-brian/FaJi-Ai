import os
import speech_recognition as sr
from textblob import TextBlob
from gtts import gTTS
import importlib

# Define the speech-to-text function
def speech_to_text():
    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Say something!")
        audio = r.listen(source)
    
    try:
        text = r.recognize_google(audio)
        print("You said: " + text)
        return text
    except sr.UnknownValueError:
        print("Could not understand audio")
    except sr.RequestError as e:
        print("Could not request results; {0}".format(e))

# Define the text-to-speech function
def text_to_speech(text):
    language = 'en'
    output = gTTS(text=text, lang=language, slow=False)
    output.save("output.mp3")
    os.system("mpg321 output.mp3")

# Main function to prompt the user and call the appropriate function
def main():
    while True:
        text = speech_to_text()
        blob = TextBlob(text)
        if blob.sentiment.polarity > 0.5:
            if "Google search" in text:
                os.chdir("./GoogleSearch")
                app_module = importlib.import_module("app")
                app_module.google_search(text.replace("Google search", ""))
                os.chdir("..")
            elif "ChatGPT search" in text:
                os.chdir("./ChatGPT")
                app_module = importlib.import_module("app")
                app_module.chatgpt_search(text.replace("ChatGPT search", ""))
                os.chdir("..")
            elif "read email" in text:
                os.chdir("./Email")
                app_module = importlib.import_module("app")
                app_module.read_email()
                os.chdir("..")
            elif "compose email" in text:
                os.chdir("./Email")
                app_module = importlib.import_module("app")
                app_module.compose_email()
                os.chdir("..")
            elif "create calendar event" in text:
                os.chdir("./Calendar")
                app_module = importlib.import_module("app")
                app_module.create_calendar_event()
                os.chdir("..")
            elif "read calendar event" in text:
                os.chdir("./Calendar")
                app_module = importlib.import_module("app")
                app_module.read_calendar_event()
                os.chdir("..")
            elif "perform task" in text:
                os.chdir("./Task")
                app_module = importlib.import_module("app")
                app_module.perform_task()
                os.chdir("..")
            elif "get weather update" in text:
                os.chdir("./Weather")
                app_module = importlib.import_module("app")
                app_module.get_weather_update()
                os.chdir("..")
            elif "make call" in text:
                os.chdir("./Call")
                app_module = importlib.import_module("app")
                app_module.make_call()
                os.chdir("..")
            elif "send WhatsApp message" in text:
                os.chdir("./WhatsApp")
                app_module = importlib.import_module("app")
                app_module.send_whatsapp_message()
                os.chdir("..")
        else:
            text_to_speech("Sorry, I could not understand what you said. Please try again.")
            continue

if __name__ == '__main__':
    main()
