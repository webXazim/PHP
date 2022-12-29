import React from 'react';
import ReactDOM from 'react-dom';

import './whoami.css'
function About() {
    return (
        <main className="main">

            <div id="gradibg">
                <div className='bgimg'>
                    <section className="container">
                        <div className="row justify-content-center">
                            <div className="">
                                <article className="whoami container">
                                    <h1 data-aos='fade-up' data-aos-duration='500'>Whoami?</h1>
                                    <h5 data-aos='fade-up' data-aos-duration='800'>I'm 22 years old, BBM student and a seft-taught JavaScript & Python programmer boy from Bangladesh.
                                    </h5>

                                    <div className='mt-5'>
                                        <h2 data-aos='fade-up' data-aos-duration='1000'>Why?</h2>
                                        <h6 data-aos='fade-up' data-aos-duration='1200'>To help by building secure, responsive, dynamic websites for almost everything world wide.
                                        </h6>
                                    </div>
                                    <div className='mt-5'>
                                        <h2 data-aos='fade-up' data-aos-duration='1500'>Why?</h2>
                                        <h6 data-aos='fade-up' data-aos-duration='1700'>Solving problem is my passion, it help others and they pay as the fuel of it.
                                        </h6>
                                    </div>

                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <section className='section1'>
                <div className=''>
                    <article className='whywhat container-xxl'>
                        <div className='binding container'>
                            <h1 data-aos='fade-in' data-aos-duration='500'>webXazim</h1>
                            <h6 data-aos='fade-in' data-aos-duration='800'>"webXazim" in short "WXA" in long "Web Xpert Azim" is what where an individual provide web development services internationally online, sell amazing pre-built website at super low cost, shows his portfolio and writes useful article/blog posts to share experience/knowledge with other developers, and with a purpose of making website available for all(i.e: small, big business, individual). </h6>
                        </div>
                        <div data-aos='fade-in' data-aos-duration='800' className='brand-img'>
                            <img src='images/wxa-logo.png' alt='web xpert azim logo' />
                        </div>
                    </article>
                </div>
            </section>
            <section className='section2'>
                <div className='container'>
                    <article className='behind-the-scenes'>
                        <div className='behind-the-scenes-binding'>
                            <h1 data-aos='fade-up' data-aos-duration='800'>Behind the scenes</h1>
                            <h6 data-aos='fade-up' data-aos-duration='1000'>"Behind The Scenes" lots of to happen i.e before working on a project considering why to build, what to build, for whom to build, how to build etc. After that ready to create Algorithm etc.... You are as my client may want to know what/how I'm bulding your project so below a bit idea. </h6>
                            <p></p>
                        </div>
                        <h2 data-aos='fade-up' data-aos-duration='1200'>Building scenes in step.</h2>
                        <div className='photogrid'>

                            <div className='scene-steps'>
                                <i data-aos='fade-up' data-aos-duration='1300' className="fa-solid fa-lightbulb"></i>
                                <div className='step'>
                                    <h3 data-aos='fade-up' data-aos-duration='1400'>Idea/Problem</h3>
                                    <p data-aos='fade-up' data-aos-duration='1600'>First identifying what is the exact problem.</p>
                                </div>
                            </div>
                            <div className='scene-steps'>
                                <i data-aos='fade-up' data-aos-duration='1300' className="fa-solid fa-shoe-prints"></i>
                                <div className=''>
                                    <h3 data-aos='fade-up' data-aos-duration='1400'>Algorithm</h3>
                                    <p data-aos='fade-up' data-aos-duration='1600'>Breaking the problem into several top step.</p>
                                </div>
                            </div>
                            <div className='scene-steps'>
                                <i data-aos='fade-up' data-aos-duration='1300' className="fa-solid fa-code"></i>
                                <div className=''>
                                    <h3 data-aos='fade-up' data-aos-duration='1400'>Code/Develop</h3>
                                    <p data-aos='fade-up' data-aos-duration='1600'>Coding following Algorithm.</p>
                                </div>
                            </div>
                            <div className='scene-steps'>
                                <i data-aos='fade-up' data-aos-duration='1300' className="fa-solid fa-microscope"></i>
                                <div className=''>
                                    <h3 data-aos='fade-up' data-aos-duration='1400'>Test/Debug/Cleanup</h3>
                                    <p data-aos='fade-up' data-aos-duration='1600'>Testing after development.</p>
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
            </section>

            <section className='section3'>
                <div>
                    <article className='tl'>
                        <h1 className='mile-stone-img' data-aos='fade-up' data-aos-duration='800'>Mile-Stone</h1>
                        <div>
                            <div data-aos='fade-in' data-aos-duration='1300' className="timeline">
                                <div data-aos='fade-in' data-aos-duration='1500' className="containerr right">
                                    <div className="contentt">
                                        <h2>2022 - Born of webXazim</h2>
                                        <p>With a lots of positve purpose, one of them helping others</p>
                                    </div>
                                </div>
                                <div data-aos='fade-in' data-aos-duration='3000' className="containerr left">
                                    <div className="contentt">
                                        <h2>20..</h2>
                                        <p>...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section className='section4'>
                <div className='map '>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3633.233928998063!2d88.97270451479767!3d24.40793938426935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc1122db5fac29%3A0xc2713e79607bebf2!2sWebxazim!5e0!3m2!1sen!2sus!4v1658669669944!5m2!1sen!2sus" width="100%" height="100%" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>

        </main>
    );
}

export default About;

if (document.getElementById('about')) {
    ReactDOM.render(<About />, document.getElementById('about'));
}
