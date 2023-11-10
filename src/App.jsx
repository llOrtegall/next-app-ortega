import { Layout } from './components/Layout.jsx'
import { Route, Routes } from 'react-router-dom'

import { AboutUs } from './pages/AboutUs.jsx'
import { Products } from './pages/Prodcuts.jsx'
import { Home } from './pages/Home.jsx'

export function App () {
  return (
    <Routes>
      <Route path="/" element={<Layout />} >
        <Route index element={<Home/>} />
        <Route path="/about" element={<AboutUs />} />
        <Route path="/products" element={<Products />} />
      </Route>
    </Routes>
  )
}
