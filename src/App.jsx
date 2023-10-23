import { Home } from './pages/Home.jsx'
import { AboutUs } from './pages/AboutUs.jsx'
import { Route, Routes } from 'react-router-dom'

export function App () {
  return (
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/about" element={<AboutUs />} />
      </Routes>
  )
}
