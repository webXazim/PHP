import React from 'react';
import ReactDOM from 'react-dom';


//for the slide show
import 'react-slideshow-image/dist/styles.css'
import { Slide } from 'react-slideshow-image';

//style css
import "./style.css"

import TypeIt from "typeit-react";

const xs = [
  {
    id: 1,
    icon: <i className="fa-solid fa-bolt-lightning"></i>,
    title: "Fast",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 2,
    icon: <i className="fa-solid fa-gears"></i>,
    title: "Dynamic",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 3,
    icon: <p><i className="fa-solid fa-tablet-screen-button"></i><i className="fa-solid fa-display"></i><i className="fa-solid fa-mobile-screen-button"></i></p>,
    title: "Responsive",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 4,
    icon: <i className="fa-solid fa-flask-vial"></i>,
    title: "End to End tested",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 5,
    icon: <i className="fa-solid fa-user-group"></i>,
    title: "User Friendly Interface",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 6,
    icon: <i className="fa-solid fa-code"></i>,
    title: "Neat & Clean Code",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 7,
    icon: <i className="fa-solid fa-headset"></i>,
    title: "24/7 Support",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },
  {
    id: 8,
    icon: <i className="fa-solid fa-screwdriver-wrench"></i>,
    title: "FREE Setup",
    description: "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adipiscing",
  },

]

function Shop() {
  return (
    <div className="shop-header text-white">
      <div className="pt-3 sliderList">
        <div className="">
          <Slideshow />
        </div>
      </div>

      <div className='container-xxl mt-lg-5 mt-2 text-center'>
        <h4 className="text-white App">
          <TypeIt
            options={{
              strings: [`Why Xtore better for you...?`],
              speed: 20,
              waitUntilVisible: true,
            }}
          />
        </h4>
        <div className='featureList'>
          {
            xs.map((x) => {
              return <X key={x.id} {...x} />
            })
          }
        </div>
      </div>
    </div>
  );
}

const X = ({ id, icon, title, description }) => {
  return (
    <div data-aos="flip-left" className='text-center img-fluid rounded mx-auto d-block' >
      <h4>{icon}</h4>
      <h2 className='mt-1'>{title}</h2>
      <p>{description}</p>
    </div>
  )
}



// slide show
const Slideshow = () => {
  return (
    <div>
      <Slide easing="ease">
        <div className="each-slide">
          <div style={{ 'backgroundImage': `url('https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0')` }}>
            <span>Slide 1</span>
          </div>
        </div>
        <div className="each-slide">
          <div style={{ 'backgroundImage': `url('https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0')` }}>
            <span>Slide 2</span>
          </div>
        </div>
        <div className="each-slide">
          <div style={{ 'backgroundImage': `url('https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0')` }}>
            <span>Slide 3</span>
          </div>
        </div>
      </Slide>
    </div>
  )
};





export default Shop;

if (document.getElementById('shop')) {
  ReactDOM.render(<Shop />, document.getElementById('shop'));
}
