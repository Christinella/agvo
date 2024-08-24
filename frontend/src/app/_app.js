import '../styles/globals.css'; // Importez les styles globaux
import 'bootstrap/dist/css/bootstrap.min.css'; // Importez Bootstrap si nécessaire
import Navbar from '@/components/Navbar';
import Footer from '@/components/Footer';

function MyApp({ Component, pageProps }) {
  return (
    <>
      <Navbar />
      <Component {...pageProps} />
      <Footer />
    </>
  );
}

export default MyApp;