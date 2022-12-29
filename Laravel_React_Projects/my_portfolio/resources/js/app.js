import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// for the portfolio
require('./components/portfolio/header');
require('./components/portfolio/services');
require('./components/portfolio/skills');
require('./components/portfolio/projects');
require('./components/portfolio/testimonials');
require('./components/portfolio/contact');

// for the shop
require('./components/shop/shop');
require('./components/shop/latestProducts');
require('./components/shop/eCommerce');
require('./components/shop/business');


// for the about
require('./components/about/about');

// for the report
require('./components/feedback/feedback');

// for pre-built
require('./components/pre-built/index')

