import React from 'react';
import ReactDOM from 'react-dom';

import './style.css'

function Products() {
    return (
        <div>
            <div className=''>
             <section>
             <div>
              <h1 className='text-center'><b>Business Website</b></h1>
             </div>

             <div className='productList'>
            {
                business.map((product) =>{
                   return <Product key={product.id} {...product}/>
                })
            }
             </div>
            </section>
            
            </div>
            <hr/>
        </div>
    );
}




const business = [{
        id: 1,
        img: 'https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0',
        title: 'HP ENVY x360 15t Laptop',
        text: 'While not all photo editors think they need a touch screen laptop, the possibilities that come with owning one should be considered. The HP ENVY x360 15t laptop offers a responsive screen that works seamlessly with the HP Pen so you can manipulate photos and add special touches just like drawing on a notebook.',
        OP: "HTML5 CSS3 Bootstrap JavaScript React"
    },
    {
        id: 2,
        img: 'https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0',
        title: 'HP OMEN 15t Laptop',
        text: 'When many people think of the HP OMEN line of laptops, they immediately think of gaming. While the HP OMEN 15t laptop is a top choice among that crowd, the features that make it a great pick for gamers also make it an ideal option for photo enthusiasts.',
        OP: "HTML5 CSS3 Bootstrap React Laravel"
    },
    {
        id: 3,
        img: 'https://dl.dropbox.com/s/pmaew1igums6a2t/JavaScript-logo.png?dl=0',
        title: 'HP Spectre 13t Laptop',
        text: 'If you take your photography seriously and treat it like a business, it may be time to consider a business-class laptop to edit, create, and explore.',
        OP: "HTML5 CSS3 Bootstrap React"
    }
]



const Product = ({id, img, title, text, OP}) => {
    return(
        <article  data-aos='fade-left'
     data-aos-anchor-placement="bottom-center"   className='product' style={{backgroundImage: `url(${img})`, padding: '10%'}}>
        <p>#{id}</p>
            <h1>{title}</h1>
            <div>
             <h6>{text}</h6>
             <h5>{OP}</h5>
             <div className='d-flex mt-4'>
              <a href='#'><button><h3>View</h3></button></a>
              <a className='ms-3' href='#'><button><h3>Buy</h3></button></a>
             </div>
            </div>
        </article>
    )
}






export default Products;

if (document.getElementById('business')) {
    ReactDOM.render(<Products />, document.getElementById('business'));
}
