const proxy = [
    {
      context: ['/api/recommendations'],
      target: 'http://localhost:8000/',
      secure: false,
    }
  ];
  module.exports = proxy;