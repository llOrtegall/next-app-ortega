import express from 'express';
import morgan from 'morgan';
import cors from 'cors';

const app = express();
const PORT = process.env.PORT || 4000;

// Middleware to parse JSON bodies
app.use(express.json());
// Middleware to enable CORS
app.use(cors());
// Middleware to parse URL-encoded bodies
app.use(express.urlencoded({ extended: true }));
// Middleware for logging HTTP requests
app.use(morgan('dev'));

// Example route
app.get('/', (req, res) => {
  res.send('Hello World!');
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});