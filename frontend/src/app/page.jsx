"use client";

// pages/index.jsx (ou le fichier où vous souhaitez inclure la Navbar)
import Image from 'next/image';
import styles from '../Home.module.css';// Assurez-vous que le chemin est correct pour vos styles


export default function Home() {
  return (
    <div>
      {/* Image pleine largeur avec texte et bouton */}
      <div className={styles.imageContainer}>
        <div className={styles.overlay}>
          <div className={styles.textContainer}>
            <h1 className={styles.heading}>Explorez le Monde</h1>
            <p className={styles.subtext}>Depaisez-vous sans vous souciez de ce que vous allez faire..</p>
            <a href="#" className={styles.button}>Contactez Nous</a>
          </div>
        </div>
        <div className={styles.fullWidthImage}>
          <Image 
            src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Image pleine largeur Unsplash"
            layout="fill" 
            objectFit="cover" 
            priority 
          />
        </div>
      </div>

      {/* Section Destinations coup de coeur */}
      <div className="container my-5">
        <h2 className="text-center mb-4">Destinations coup de coeur</h2>
        <div className="row">
          <div className="col-md-3">
            <Image 
              src="https://images.unsplash.com/photo-1558694440-03ade9215d7b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Destination 1" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
          <div className="col-md-3">
            <Image 
              src="https://images.unsplash.com/photo-1516306580123-e6e52b1b7b5f?q=80&w=1852&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Destination 2" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
          <div className="col-md-3">
            <Image 
              src="https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Destination 3" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
          <div className="col-md-3">
            <Image 
              src="https://images.unsplash.com/photo-1659204625468-f1d7f465e86a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Destination 4" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
        </div>
      </div>

      {/* Section Offres par thématiques */}
      <div className="container my-5">
        <h2 className="text-center mb-4">Offres par thématiques</h2>
        <div className="row">
          <div className="col-md-3">
            <Image 
              src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?q=80&w=2043&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
              alt="Thème 1" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
          <div className="col-md-3">
            <Image 
              src="https://plus.unsplash.com/premium_photo-1663088674803-8c77e4aa5cf9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Thème 2" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
          <div className="col-md-3">
            <Image 
              src="https://plus.unsplash.com/premium_photo-1664298390253-3dd30d1d034d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Thème 3" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
          <div className="col-md-3">
            <Image 
              src="https://images.unsplash.com/photo-1462993340984-49bd9e0f32dd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
              alt="Thème 4" 
              width={300} 
              height={200} 
              className="img-fluid" 
            />
          </div>
        </div>
      </div>
    </div>
  );
}
