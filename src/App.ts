import * as express from 'express';
import * as logger from 'morgan';
import * as bodyParser from 'body-parser';
//import * as ExpressSession from 'express-session';

// Creates and configures an ExpressJS web server.
class App {
	public expressApp : express.Application;

	//Run configuration methods on the Express instance.
	constructor() {
		this.expressApp = express();
		this.middleware();
		this.routes();
		this.expressApp.set('view engine', 'pug');
		this.expressApp.use('/sb-admin-2/css', express.static(__dirname + '/../node_modules/startbootstrap-sb-admin-2/css'));
		this.expressApp.use('/sb-admin-2/js', express.static(__dirname + '/../node_modules/startbootstrap-sb-admin-2/js'));
	}

	// Configure Express middleware.
	private middleware() : void {
		this.expressApp.use(logger('dev'));
		this.expressApp.use(bodyParser.json());
		this.expressApp.use(bodyParser.urlencoded({extended: false}));
		/*this.expressApp.use(ExpressSession(
			{
				secret: 'My Secret Key',
				resave: false,
				saveUninitialized: true
			}));*/
	}

	// Configure API endpoints.
	private routes() : void {
		let router = express.Router();

		router.get('/', (req, res) => res.render('index'));

		this.expressApp.use('/', router);
	}
}

export default new App().expressApp;