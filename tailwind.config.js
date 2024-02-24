module.exports = {
    content: [
        // https://tailwindcss.com/docs/content-configuration
        './*.php',
        './inc/**/*.php',
        './**/*.php',
        './template-parts/**/*.php',
        './blocks/**/*.php',
        './blocks/membre-comite/membre-comite.php',
        './safelist.txt',
    ],
    safelist: [
        'text-center',
        //{
        //  pattern: /text-(white|black)-(200|500|800)/
        //}
    ],
    theme: {
        fontFamily: {
            sans: ['Montserrat', 'sans-serif'],
            serif: ['Oswald', 'Fira Sans', 'sans-serif'],
        },
        container: {
            center: true,
            padding: '1rem',
            screens: {
                md: '768px',
                lg: '1024px',
                xl: '1280px',
                '2xl': '1280px',
            },
        },
        fontSize: {
            '2xs': '.5rem',
            xs: '.75rem',
            sm: '.875rem',
            base: '1rem',
            lg: '1.125rem',
            xl: '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.875rem',
            '4xl': '2.25rem',
            '5xl': '3rem',
            '6xl': '4rem',
        },
        extend: {
            colors: {
                primary: '#2b2d42',
                secondary: '#8d99ae',
                accent: '#d80032',
                accent2: '#ef233c',
                white: '#edf2f4',
            },
        },
    },
    plugins: [],
};
