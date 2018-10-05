// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// Import jQuery plugin

import 'jscroll/dist/jquery.jscroll.min';

// Import owl.carousel
import 'owl.carousel/dist/owl.carousel.min';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import fontawesome from "@fortawesome/fontawesome";
import faFacebook from "@fortawesome/fontawesome-free-brands/faFacebookF";
import faTwitter from "@fortawesome/fontawesome-free-brands/faTwitter";
import faSearch from "@fortawesome/fontawesome-free-solid/faSearch";
import faEnvelope from "@fortawesome/fontawesome-free-solid/faEnvelope";
import faCalendar from "@fortawesome/fontawesome-free-solid/faCalendarAlt";
import faChevronCircleUp from "@fortawesome/fontawesome-free-solid/faChevronCircleUp";

fontawesome.library.add(faFacebook, faTwitter, faSearch, faEnvelope, faCalendar, faChevronCircleUp);

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
