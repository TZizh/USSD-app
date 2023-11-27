import os
from flask import Flask, request, g
from flask_socketio import SocketIO

os.environ['FLASK_ENV'] = 'development'
app.wsgi_app = app.make_wsgi_app(environ=os.environ)
