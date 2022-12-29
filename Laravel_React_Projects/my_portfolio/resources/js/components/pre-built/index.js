import React from 'react';
import ReactDOM from 'react-dom';

import './style.css'
function PreBuilt() {
    const popdown = () => {
        const container = document.querySelector('.popup')
        container.style.display = 'none'
    }
    return (
        <div className="pre-built">
            <div className="justify-content-center pt-5 pb-5">
                <div className="col-md-12 col-lg-10 pt-5 container-xl">
                    <h1>Wonderful Pre-Built Websites</h1>


                    {/* Popup overlay */}
                    <aside onDoubleClick={popdown} className='popup'>
                        <section className='readMoreContent'>
                            <nav className='subNav'>
                                <ul>
                                    <li><h3 id='title'></h3></li>
                                    <li>Quality</li>
                                    <li>Features</li>
                                </ul>
                            </nav>
                            <video data-aos='fade-zoom-in' data-aos-duration="1000"
                                src="video/test.mp4" controls autoplay="autoplay" muted loop id="myVideo"></video>
                            <div className='project-details'>
                                <p><b>Description:</b> this is the this is the project is the this is that.</p>
                                <h4>Project Details</h4>
                                <div>
                                    <ol>
                                        <h4>Key Features</h4>
                                        <li>Authentication & Authorization</li>
                                        <li>Chat</li>
                                        <li>User Profile</li>
                                    </ol>
                                </div>
                            </div>
                        </section>
                    </aside>

                    <div className="card">
                        <div className="card-header">Find you want, for Live Previewing <i className="fa-solid fa-binoculars"></i> and for Learning more about the project <i className="fa-brands fa-readme"></i>.</div>

                        <div className="card-body">
                            {
                                projects.map((Product) => {
                                    return <PreProject key={Product.id} {...Product} />
                                })
                            }
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}


const projects = [
    {
        //     id: 1,
        //     link: 'linkOfThePager 1',
        //     img: 'https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0',
        //     title: 'HP ENVY x360 15t ',
        //     text: 'While not all photo editors think they need a touch screen laptop, the possibilities that come with owning one should be considered. The HP ENVY x360 15.',
        //     tech: "HTML5 CSS3 Bootstrap JavaScript React"
    },


]



const PreProject = ({ id, link, img, title, text, tech }) => {


    const popup = () => {
        const container = document.querySelector('.popup')
        container.style.display = ''
        document.querySelector('#title').innerHTML = `${title}`
    }


    return (
        <article data-aos='fade-right' className='m-2'>
            <section>
                <div className='card-element'>
                    <img src={img} alt={title} />
                    <div className=''>
                        <h2>{title}</h2>
                        <h3>Sorry! Projects are comming soon.</h3>
                        <p>{text}</p>
                        <h5>{tech}</h5>
                    </div>
                    <footer className="btn">
                        <a href="#" title='Live Preview' target={'_blank'}><button><i className="fa-solid fa-binoculars"></i></button></a><br />
                        <button onClick={popup}><i className="fa-brands fa-readme"></i></button>
                    </footer>
                </div>

            </section>
        </article>
    )
}









export default PreBuilt;

if (document.getElementById('pre-built')) {
    ReactDOM.render(<PreBuilt />, document.getElementById('pre-built'));
}
