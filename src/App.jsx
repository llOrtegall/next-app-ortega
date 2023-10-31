import { Home } from './pages/Home.jsx'
import { AboutUs } from './pages/AboutUs.jsx'
import { Route, Routes } from 'react-router-dom'
import { Products } from './pages/Prodcuts.jsx'

export function App () {
  return (
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/about" element={<AboutUs />} />
        <Route path="/products" element={<Products />} />
      </Routes>
  )
}
