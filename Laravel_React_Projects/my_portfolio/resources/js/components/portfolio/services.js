import React from 'react';
import ReactDOM from 'react-dom';

import './header.css'

function Services() {
    return (
        <div className='services'>
            <div className='container-xl'>


                <section className=''>
                    <h1 className='tc'><b>Services</b></h1>
                    <h6 className='tc'>I can help you by developing your website front-end and back-end also taking care of it and writing neat-clean code by following algorithm, using the right tool-set.</h6>
                    <div className='top-border'></div>
                    <div className=' justify-content-center d-md-flex'>

                        <div className='service-card pt-sm-2 text-sm'>
                            <i className="fa-solid fa-laptop-code"></i>
                            <h2>Front-end Development</h2>
                            <p>Generally I use HTML5, CSS3 and JavaScript frameworks/library React, Angular and these are the most popular and powerful tools for solving web front-end problem</p>
                        </div>
                        <div className='service-card text-sm ms-lg-4 pt-sm-2'>
                            <i className="fa-solid fa-code"></i>
                            <h2>Back-end Development</h2>
                            <p>For the Back-end solution I use JavaScript framework Express, Python framework Django, PHP framework Laravel and Database Mongo, MySQL.</p>
                        </div>
                        <div className='service-card text-sm ms-lg-4 pt-sm-2'>
                            <i className="fa-solid fa-gears"></i>
                            <h2>Web Maintenance</h2>
                            <p>In order to make sure that your website is achieving its purpose, web maintenance is essential so Yes! I'm not leaving you alone.</p>
                        </div>



                    </div>
                </section>

            </div>
        </div>
    );
}

export default Services;

if (document.getElementById('services')) {
    ReactDOM.render(<Services />, document.getElementById('services'));
}
