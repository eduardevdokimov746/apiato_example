require('./bootstrap');
import ReconnectingWebSocket from 'reconnecting-websocket';

var conn = new ReconnectingWebSocket('ws://127.0.0.1:5555');
window.conn = conn;
