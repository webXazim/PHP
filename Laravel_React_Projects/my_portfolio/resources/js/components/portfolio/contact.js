import React from 'react';
import ReactDOM from 'react-dom';

import './contact.css'

function Contact() {
    return (
        <div className='contact'>
            <div className=''>
                <section className='contact-map'>
                    <div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3633.233928998063!2d88.97270451479767!3d24.40793938426935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc1122db5fac29%3A0xc2713e79607bebf2!2sWebxazim!5e0!3m2!1sen!2sus!4v1658669669944!5m2!1sen!2sus" width="100%" height="100%" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </section>


            </div>

        </div>
    );
}

export default Contact;

if (document.getElementById('contact')) {
    ReactDOM.render(<Contact />, document.getElementById('contact'));
}
