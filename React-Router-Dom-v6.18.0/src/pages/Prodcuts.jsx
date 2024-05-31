import { Routes, Route } from 'react-router-dom'
import { ProductDetail } from '../components/ProductDetail'

// eslint-disable-next-line react/prop-types
export function Products ({ test }) {
  return (
    <>
      <h3>
        Products Page: {test}
      </h3>
      <Routes>
        <Route
          path=':productId'
          element={<ProductDetail />}
        />
      </Routes>
    </>
  )
}
