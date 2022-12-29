import React from 'react';
import ReactDOM from 'react-dom';


import './projects.css'


function Projects() {
    return (
        <div className='projects spacer wave'>

            <section className='container-sm container-xl'>
                <div className='project-section-header mb-lg-4 mb-2'>
                    <h1 data-aos='fade-up' data-aos-duration="500" className='text-center'><b>Latest Projects</b></h1>
                    <h6 data-aos='fade-up' data-aos-duration="800">Something is better than nothing, currently working on new projects using flask, laravel, angular, react.</h6>
                </div>

                <div className='each-card'>
                    {
                        projects.map((Product) => {
                            return <LatestProduct key={Product.id} {...Product} />
                        })
                    }
                </div>
            </section>
        </div>
    );
}



const projects = [{
    id: 2,
    style: ['fade-up', '2000'],
    img: 'https://dl.dropbox.com/s/6zwltc6pd02mg2l/js-weather-app.png?dl=0',
    preview: 'https://webxazim-js-weather-app.netlify.app/',
    source: 'https://github.com/webXazim/vanilla_project/tree/main/js%20Weather%20app',
    title: 'JS Weather App',
    text: 'Using Openwather API.',
    tools: "HTML, CSS, JavaScript"
},
{
    id: 3,
    style: ['fade-up', '2000'],
    img: 'https://dl.dropbox.com/s/n5fe0q9eaimdirt/simple-tribute-page.png?dl=0',
    preview: 'https://webxazim-tribute-page.netlify.app/',
    source: 'https://github.com/webXazim/vanilla_project/tree/main/Tribute%20page',
    title: 'Tribute Page',
    text: 'This is a very simple Tribute page.',
    tools: "HTML, CSS"
},


]



const LatestProduct = ({ id, style, img, preview, source, title, text, tools }) => {
    return (
        <div className={'item' + id}>
            <article data-aos={style[0]} data-aos-duration={style[1]} className='project-card' id='a' style={{ backgroundImage: `url(${img})`, backgroundSize: 'cover' }}>
                <div className="card-data">
                    <div className='card-text'>
                        {/* <img src={img}></img> */}
                        <h2>{title}</h2>
                        <p>{text}</p>
                        <h6>{tools}</h6>
                    </div>
                    <div>
                        <div className='d-flex mt-4 project-card-btn'>
                            <a href={preview} target='_blank'><button><h3>Live Preview</h3></button></a>
                            <a href={source} target="_blank"><button><h3>Source</h3></button></a>
                        </div>
                    </div>
                </div>
                <div className='preview-icon preview-btn-lg' id='b'>
                    <a href={preview} target={'_blank'} title="Live Preview">Live Preview</a>
                    <a href={source} target='_blank'>Source</a>
                </div>
            </article>
        </div>
    )
}






export default Projects;

if (document.getElementById('projects')) {
    ReactDOM.render(<Projects />, document.getElementById('projects'));
}
