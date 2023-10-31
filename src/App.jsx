import { Home } from './pages/Home.jsx'
import { AboutUs } from './pages/AboutUs.jsx'
import { Route, Routes } from 'react-router-dom'
import { Products } from './pages/Prodcuts.jsx'
import { NavBar } from './components/NavBar.jsx'

export function App () {
  return (
    <>
      <NavBar />
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/about" element={<AboutUs />} />
        <Route path="/products" element={<Products />} />
      </Routes>
    </>
  )
}
