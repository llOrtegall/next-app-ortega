import { Link } from 'react-router-dom'

export function NavBar () {
  return (
    <>
      <h1>Welcome To React Router</h1>
      <hr />
      <nav>
        <ul style={{ display: 'flex', justifyContent: 'space-around' }}>
          <li>
            <Link to='/'> Home </Link>
          </li>
          <li>
            <Link to='about'> About Us </Link>
          </li>
          <li>
            <Link to='products'> Products </Link>
          </li>
        </ul>
      </nav>
      <hr />
    </>
  )
}
