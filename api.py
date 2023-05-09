from flask import Flask, jsonify, request
import subprocess

app = Flask(__name__)

@app.route('/api/run_script', methods=['POST'])
def run_script():
    # get the query from the request data
    query = request.json.get('query')

    # run the Python script using subprocess
    result = subprocess.run(['python', 'path/to/script.py', query], stdout=subprocess.PIPE)

    # get the output from the subprocess result and convert to string
    output = result.stdout.decode('utf-8')

    # convert the output to JSON format
    response = jsonify({'result': output})

    return response

if __name__ == '__main__':
    app.run(debug=True)
