import React from 'react';
import ReactDOM from 'react-dom';


import './header.css'
import './testimonial.css'

import 'react-slideshow-image/dist/styles.css'
import { Slide } from 'react-slideshow-image';


const Slideshow = () => {
  return (
    <div className=''>
      <div className="container-xxl">
        <Slide easing="ease">
          <div className="each-slide">
            <div style={{ 'backgroundImage': `url('https://d.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0')` }}>
              <div className=''>
                <blockquote className="q-card q-card-color-1">
                  <div className="content">Great Services ever, I'm really satisfied.Great Services ever, I'm really satisfied.Great Services ever, I'm really satisfied.Great Services ever, I'm really satisfied.Great Services ever, I'm really satisfied.Great Services ever, I'm really satisfied.</div>
                  <div className='author'>
                    <img src='#' alt='image' />
                    <h2>JOhn Doe</h2>
                    <h3>Web Developer</h3>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
          <div className="each-slide">
            <div style={{ 'backgroundImage': `url('https://d.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0')` }}>
              <div>
                <blockquote className="q-card q-card-color-2">
                  <div className="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eusismod tincidunt.</div>
                  <div className='author'>
                    <img src='#' alt='image' />
                    <h2>Jogn Morgan</h2>
                    <h3>Web Developer</h3>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
          <div className="each-slide">
            <div style={{ 'backgroundImage': `url('https://d.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0')` }}>
              <div>
                <blockquote className="q-card q-card-color-3">
                  <div className="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eusismod tincidunt.</div>
                  <div className='author'>
                    <img src='#' alt='image' />
                    <h2>Jhn Doe</h2>
                    <h3>Web Developer</h3>
                  </div>
                </blockquote>
              </div>
            </div>
          </div>
        </Slide>
      </div>
    </div>
  )
};



function Testimonials() {
  return (
    <div className='testimonials'>
      <div id='mainSection' className='container-xxl d-flex'>
        <section id='KWFlex' className='margin d-lg-flex d-sm-block tc'>
          <div className='ms-lg-5 me-lg-5'>
            <h1 className=''><b>Client's<br />kind Words</b></h1>
          </div>
          <div className='tc ms-lg-5 me-lg-5 pe-lg-5'>
            <h3 className='tc ms-lg-5 me-lg-5 pe-lg-5'>I help ambitious business like your generate more profits by building awarness, driving web traffic, connecting with customers and growing overall sales.</h3>
          </div>
        </section>

        <section>
          <div className='text-end mt-5'>

          </div>
        </section>

      </div>
      <section>
        <div>
          <Slideshow />
        </div>
      </section>

    </div>
  );
}

export default Testimonials;

if (document.getElementById('testimonials')) {
  ReactDOM.render(<Testimonials />, document.getElementById('testimonials'));
}
