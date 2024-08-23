import 'bootstrap/dist/css/bootstrap.min.css';

export default function navbar() {
    return (
        <div className="collapse navbar-collapse justify-content-end mx-5 align-middle" id="navbarNav">
            <ul className="navbar-nav">
                <li className="nav-item">
                    <Link href="/" className="nav-link active fs-3 mx-2" aria-current="page">Accueil</Link>
                </li>
                <li className="nav-item ">
                    <Link href="/voyages" className="nav-link active fs-3 mx-2" aria-current="page">Nos Voyages</Link>
                </li>
                <li className="nav-item">
                    <Link href="/contact" className="nav-link active fs-3 mx-2" aria-current="page">Contact</Link>
                </li>
            </ul>
        </div>)
}


