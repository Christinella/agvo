'use client'; 
import { useState, useEffect } from 'react';
import axios from 'axios';

export default function Destinations() {
  const [destinations, setDestinations] = useState([]);
  
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
    <div>
    <h1>Destination List</h1>
    <ul>
        {destinations.map(destination => (
            <li key={destination.id}>
                {destination.image && <img src={destination.image} alt={destination.nom} />}
               
            </li>
        ))}
    </ul>
</div>
  );
}