import React from 'react';
import ReactDOM from 'react-dom';

import './skills.css'

function Skills() {
    return (
        <div className="skill-section">
            <article className="container-sm container">
                <section className="skill-bar-container">
                    <div className="skill-header">
                        <h1 data-aos='fade-up' data-aos-duration="500">Key Skills</h1>
                        <h6 data-aos='fade-up' data-aos-duration="800">To develop something great require more than just specific skills/knowledges so some of my key skill below.</h6>
                    </div>

                    <div className="skill grid">
                        <div data-aos='zoom-in' data-aos-duration="600" className="skill-logo me-md-4"><i className="fa-brands fa-html5"></i></div>
                        <div data-aos='fade-right' data-aos-duration="1000" className="full-bar">
                            <div data-aos='fade-right' data-aos-duration="1200" className="skills html"><span className="left-">HTML</span><span className="right-">95%</span></div>
                        </div>
                        <div data-aos='fade-out' data-aos-duration="2500" className='in-action-btn'><a href="" className="in-action-link"><button disabled type='buttom'>In Action</button></a></div>
                    </div>

                    <div className="skill grid">
                        <div data-aos='zoom-in' data-aos-duration="600" className="skill-logo me-md-4"><i className="fa-brands fa-css3-alt"></i></div>
                        <div data-aos='fade-right' data-aos-duration="1000" className="full-bar">
                            <div data-aos='fade-right' data-aos-duration="1200" className="skills css"><span className="left-">CSS</span><span className="right-">85%</span></div>
                        </div>
                        <div data-aos='fade-out' data-aos-duration="2500" className='in-action-btn'><a href="" className="in-action-link"><button disabled type='buttom'>In Action</button></a></div>
                    </div>

                    <div className="skill grid">
                        <div data-aos='zoom-in' data-aos-duration="600" className="skill-logo me-md-4"><i className="fa-brands fa-js"></i></div>
                        <div data-aos='fade-right' data-aos-duration="1000" className="full-bar">
                            <div data-aos='fade-right' data-aos-duration="1200" className="skills js"><span className="left-">JavaScript</span><span className="right-">85%</span></div>
                        </div>
                        <div data-aos='fade-out' data-aos-duration="2500" className='in-action-btn'><a href="" className="in-action-link"><button disabled type='buttom'>In Action</button></a></div>
                    </div>
                    <div className="skill grid">
                        <div data-aos='zoom-in' data-aos-duration="600" className="skill-logo me-md-4"><i className="fa-brands fa-react"></i></div>
                        <div data-aos='fade-right' data-aos-duration="1000" className="full-bar">
                            <div data-aos='fade-right' data-aos-duration="1200" className="skills react"><span className="left-">React</span><span className="right-">80%</span></div>
                        </div>
                        <div data-aos='fade-out' data-aos-duration="2500" className='in-action-btn'><a href="" className="in-action-link"><button disabled type='buttom'>In Action</button></a></div>
                    </div>
                    <div className="skill grid">
                        <div data-aos='zoom-in' data-aos-duration="600" className="skill-logo me-md-4"><i className="fa-brands fa-angular"></i></div>
                        <div data-aos='fade-right' data-aos-duration="1000" className="full-bar">
                            <div data-aos='fade-right' data-aos-duration="1200" className="skills angular"><span className="left-">Angular</span><span className="right-">70%</span></div>
                        </div>
                        <div data-aos='fade-out' data-aos-duration="2500" className='in-action-btn'><a href="" className="in-action-link"><button disabled type='buttom'>In Action</button></a></div>
                    </div>

                    <div className="skill grid">
                        <div data-aos='zoom-in' data-aos-duration="600" className="skill-logo me-md-4"><i className="fa-brands fa-python"></i></div>
                        <div data-aos='fade-right' data-aos-duration="1000" className="full-bar">
                            <div data-aos='fade-right' data-aos-duration="1200" className="skills python"><span className="left-">Python</span><span className="right-">85%</span></div>
                        </div>
                        <div data-aos='fade-out' data-aos-duration="2500" className='in-action-btn'><a href="" className="in-action-link"><button disabled type='buttom'>In Action</button></a></div>
                    </div>

                    <p className='text-gray-100' data-aos='fade-up' data-aos-duration="2800">Also Python Flask, FastAPI, PHP, Laravel, Git, Docker, Kali-linux etc.</p>
                </section>


            </article>
        </div>
    );
}

export default Skills;

if (document.getElementById('skills')) {
    ReactDOM.render(<Skills />, document.getElementById('skills'));
}
