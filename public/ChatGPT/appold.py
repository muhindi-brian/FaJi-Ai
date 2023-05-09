import openai
openai.api_key = "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"

def chatgpt_search(prompt):
    model_engine = "text-davinci-002"
    completions = openai.Completion.create(
        engine=model_engine,
        prompt=prompt,
        max_tokens=2048,
        n=1,
        stop=None,
        temperature=0.5,
    )

    message = completions.choices[0].text.strip()
    return message
