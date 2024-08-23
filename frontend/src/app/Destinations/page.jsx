"use client";

import { useState, useEffect } from 'react';
import axios from 'axios';
import Image from 'next/image';

const styles = {
  container: {
    padding: '20px',
    backgroundColor: '#f5f5f5',
  },
  title: {
    fontSize: '2em',
    marginBottom: '20px',
  },
  paragraph: {
    fontSize: '1.2em',
    lineHeight: '1.6',
  },
  imageContainer: {
    textAlign: 'center',
    marginTop: '20px',
  },
  image: {
    borderRadius: '10px',
  },
  contact: {
    marginTop: '30px',
  },
};

export default function Destinations() {
  const [destination, setDestinations] = useState([]);

  useEffect(() => {
    getDestinations().then((res) => {
      setDestinations(res.data);
      console.log(res.data);  // Remplacé `data` par `res.data`
    });
  }, []);

  function getDestinations() {
    let axiosConfig = {
      headers: {
        "content-type": "application/json",
      },
    };

    let url = `${process.env.NEXT_PUBLIC_BACKEND_URL}api/destinations`;

    return axios.get(url, axiosConfig).then((res) => {
      return res;
    });
  }

  return (
    <div style={styles.container}>
      <h1 style={styles.title}>À propos</h1>

      <p style={styles.paragraph}>
        La plume des Ecrins vous attend patiemment au bourg d'Oisans. A proximité d'un cadre naturel époustouflant, venez faire le plein de littérature avant de partir à l'aventure braver mère nature. Bande dessinée, grands classiques ou encore fantasy, notre collection hétéroclite saura vous ravir ! " L’équipe de la librairie.
      </p>

      <div style={styles.imageContainer}>
        <Image
          src="/Bibliothèque-INHA-Eklektike.jpg"
          alt="Librairie"
          width={800}
          height={450}
          style={styles.image}
        />
      </div>

      <div style={styles.contact}>
        <h2>Contactez-nous</h2>
        <p><strong>Adresse :</strong> 123 Rue de la Lecture, 75000 Paris, France</p>
        <p><strong>Téléphone :</strong> +33 1 23 45 67 89</p>
      </div>
    </div>
  );
}
