"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const express = require("express");
const logger = require("morgan");
const bodyParser = require("body-parser");
//import * as ExpressSession from 'express-session';
// Creates and configures an ExpressJS web server.
class App {
    //Run configuration methods on the Express instance.
    constructor() {
        this.expressApp = express();
        this.middleware();
        this.routes();
        this.expressApp.set('view engine', 'pug');
    }
    // Configure Express middleware.
    middleware() {
        this.expressApp.use(logger('dev'));
        this.expressApp.use(bodyParser.json());
        this.expressApp.use(bodyParser.urlencoded({ extended: false }));
        /*this.expressApp.use(ExpressSession(
            {
                secret: 'My Secret Key',
                resave: false,
                saveUninitialized: true
            }));*/
    }
    // Configure API endpoints.
    routes() {
        let router = express.Router();
        router.get('/', (req, res) => res.render('index'));
        this.expressApp.use('/', router);
    }
}
exports.default = new App().expressApp;
//# sourceMappingURL=App.js.map