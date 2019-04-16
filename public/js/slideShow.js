//animation list: card, fade, box3D, glide

$(document).ready(function () {
    $('.slideWiz').slideWiz(
        {
            auto: true,
            speed: 5000,
            type : 'pixel',
            row: 9,
            file : [
                {
                    src: {
                        main: "../img/Cover/cover1.jpg",
                        cover: "../img/Cover/cover1.jpg"
                    },
                    title: 'Title',
                    desc: 'DEscriptions dsadasdsad',
                    button: {
                        text: 'See More',
                        url: '#',
                        class: 'btn btn-medium btn-primary',
                        color: '#fff'
                    }
                },
                {
                    src: {
                        main: "../img/Cover/cover2.jpg",
                        cover: "../img/Cover/cover2.jpg"
                    },
                    title: 'Title',
                    desc: 'Some Text',
                    button: {
                        text: 'See More',
                        url: '#',
                        class: 'btn btn-medium btn-primary',
                        color: '#3781ce'
                    }
                },
                {
                    src: {
                        main: "../img/Cover/cover3.jpg",
                        cover: "../img/Cover/cover3.jpg"
                    },
                    title: 'slideWiz Library',
                    desc: 'slideWiz is a JQuery based library created by a Nigerian by the name\n' +
                    '                    \'Wisdom Emenike\' who currently works at Imaxinacion Tech, one of Nigeria\'s leading IT companies.',
                    button: {
                        text: 'See more',
                        url: '',
                        class: 'btn btn-medium btn-primary',
                        color: '#3781ce'
                    }
                },
               
                
            ]

        }
    );
});
