# Gruyère padel club

> Theme built with Tailwindcss & Vite

## Development

-   Mamp, php 8.2
-   Change any acf settings locally
-   Note: to ensure classes coming from wordpress are to be processed, add them to safelist.txt

```bash
npm run dev
# site running at http://localhost:8888
```

## Deployment to production

> Build is automatically triggered on push to master, via github actions SSH deploy.

Automatically deploys to infomaniak, except config files.
