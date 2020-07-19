import express from 'express';
import session from 'express-session';
import cookieParser from 'cookie-parser';
import logger from 'morgan';
import bodyParser from 'body-parser';
import passport from 'passport';
import { BasicStrategy } from '@natlibfi/passport-atlassian-crowd';

import config from './config.json';

class App {
	expressApp = express();

	constructor() {
		this.middleware();
		this.routes();

		this.expressApp.set('view engine', 'pug');

		this.expressApp.use(express.static(__dirname + '/../public'));
		this.expressApp.use('/sb-admin-2/css', express.static(__dirname + '/../node_modules/startbootstrap-sb-admin-2/css'));
		this.expressApp.use('/sb-admin-2/js', express.static(__dirname + '/../node_modules/startbootstrap-sb-admin-2/js'));
	}

	private middleware() : void {
		this.expressApp.use(logger('dev'));

		this.expressApp.use(bodyParser.json());
		this.expressApp.use(bodyParser.urlencoded({extended: false}));

		const secret = '1JuNvRoLNFORzHsfF1T816Ums';
		this.expressApp.use(cookieParser(secret));

		this.expressApp.use(session({
			secret,
			resave: false,
			saveUninitialized: false,
			cookie: {secure: false}
		}))

		this.expressApp.use(passport.initialize());
		this.expressApp.use(passport.session());

		passport.use(new BasicStrategy(config.crowd));

		passport.serializeUser((user, done) => done(null, user));
		passport.deserializeUser((user, done) => done(null, user));
	}

	private routes() : void {
		this.expressApp.get('/',
			App.checkLogin,
			(req, res) => res.render('index')
		);

		this.expressApp.get('/login',
			(req, res) => res.render('login')
		);
		this.expressApp.post('/login',
			passport.authenticate('atlassian-crowd-basic'),
			(req, res) => res.redirect('/')
		);
	}

	private static checkLogin(req, res, next) {
		if (req.isAuthenticated()) {
			res.locals.user = {name: req.user.name};
			next();
		}else
			res.redirect('/login');
	}
}

export default new App().expressApp;