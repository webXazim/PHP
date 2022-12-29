import React from 'react';
import ReactDOM from 'react-dom';

import './header.css'



import 'react-slideshow-image/dist/styles.css'
import { Slide } from 'react-slideshow-image';



import { useTypewriter, Cursor } from 'react-simple-typewriter'



const Twriter = () => {

    const { text } = useTypewriter({
        words: ['Full-stack Developer'],
        // loop: {1:1},
        onLoopDone: () => console.log(`loop completed`),
    })

    return (
        <div className='App'>
            <span>{text}</span>
            <Cursor />
        </div>
    )
}

function Header() {
    return (
        <React.Fragment>

            <section className="header spacer layer1">

                <div className=''>
                    <div id="main" className="container-sm d-flex">

                        <section className="lHead">
                            <div className='d-none d-lg-flex d-xl-flex d-xxl-flex pl-lg-5 mt-lg-5 social-link-list'>
                                <ul>
                                    <li data-aos='fade-up' data-aos-duration="500"><a href='https://www.linkedin.com/in/webxazim/'><i className='fab fa-linkedin'></i></a></li>
                                    <li data-aos='fade-up' data-aos-duration="1000"><a href='https://twitter.com/WebXazim'><i className='fab fa-twitter'></i></a></li>
                                    <li data-aos='fade-up' data-aos-duration="1500"><a href='https://www.instagram.com/webxazim/'><i className='fab fa-instagram'></i></a></li>
                                    <li data-aos='fade-up' data-aos-duration="2000"><a href='https://github.com/webXazim'><i className='fab fa-github'></i></a></li>
                                    <li data-aos='fade-up' data-aos-duration="2500"><a href='https://codepen.io/webXazim'><i className='fab fa-codepen'></i></a></li>
                                </ul>
                            </div>
                        </section>

                        <section className="rHead col-auto-9">
                            <div id="portfolio-right-head" className="mt-lg-3">
                                <h1 data-aos="zoom-out" data-aos-duration="2000">👋! it's <span>W</span>eb e<span>X</span>pert <span className="name">Azim</span></h1>
                                <div data-aos='zoom-in' data-aos-duration="500" className="type-writer">
                                    <Twriter />
                                </div>
                                <h5 data-aos='zoom-in' data-aos-duration="1000" className='paragraph'>
                                    Website? No worries, here I'm to help you by solving web related problems So you can Hire, Order a custom website and check out some of my <a className='txt-link' href="/pre-built">pre-built websites</a> what is ready to use.
                                    <br />
                                    <div data-aos='zoom-in' data-aos-duration="1500" className='shoplink'><a href="/pre-built"><b>Ready to use websites</b><span className="long-arrow-right"></span>
                                    </a></div>



                                </h5>
                                <br />
                                <div data-aos='fade-in' data-aos-delay='2000' data-aos-duration="2000" className="d-lg-flex d-flex d-md-flex head-button">
                                    <a className='buttonA' href="/hire"><button><span className="none">I wanna</span> <b>H</b>IRE</button></a>
                                    <a className='buttonB' href="/customorder"><button><b>O</b>RDER<span className="none"> a Custom Website</span></button></a>
                                </div>

                            </div>
                        </section>

                        <div id="scroll-indicator">
                            <div className="box">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <div className='services'>
                <div className='container-xl container-sm'>
                    <section className=''>
                        <h1 data-aos='fade-up' data-aos-duration="500" className='tc'><b>Services</b></h1>
                        <h6 data-aos='fade-up' data-aos-duration="800" className='tc'>I can help you by developing your website front-end and back-end also taking care of it and writing neat-clean code by following algorithm, using the right tool-set.</h6>
                        <div data-aos='fade-up' data-aos-duration="900" className='top-border'></div>
                        <div className=' justify-content-center d-md-flex'>

                            <div className='service-card pt-sm-2 text-sm'>
                                <i data-aos='fade-up' data-aos-duration="1000" className="fa-solid fa-code pb-2"></i>
                                <h4 data-aos='fade-up' data-aos-duration="1000">Front-end Dev</h4>
                                <p data-aos='fade-up' data-aos-duration="1500">I'll build Fast, Responsive, Dynamic, User-friendly website from your idea/design</p>
                            </div>
                            <div className='service-card text-sm ms-lg-4 pt-sm-2'>
                                <i data-aos='fade-up' data-aos-duration="1000" className="fa-solid fa-server pb-2"></i>
                                <h4 data-aos='fade-up' data-aos-duration="1000">Back-end Dev</h4>
                                <p data-aos='fade-up' data-aos-duration="1500">Also Secure, Fast back-end using Laravel, Flask, Node.</p>
                            </div>
                            <div className='service-card text-sm ms-lg-4 pt-sm-2'>
                                <i data-aos='fade-up' data-aos-duration="1000" className="fa-solid fa-gears pb-2"></i>
                                <h4 data-aos='fade-up' data-aos-duration="1000">Web Maintenance</h4>
                                <p data-aos='fade-up' data-aos-duration="1500">And Updating website content, debugging, adding new features, redesign etc.</p>
                            </div>



                        </div>
                    </section>

                </div>
            </div>
        </React.Fragment>
    );
}

export default Header;

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
