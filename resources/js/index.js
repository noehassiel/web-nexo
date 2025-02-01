import Lenis from 'lenis';
import 'lenis/dist/lenis.css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import SplitType from 'split-type'


let textWrapper = document.querySelector('.title-1')
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
let textWrapper2 = document.querySelector('.title-2')
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
let tl = gsap.timeline();
tl.to('.title-1 .letter', { opacity: 1, y: '0', clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', stagger: '.1' })
tl.to('.title-2 .letter', { opacity: 1, y: '0', clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', stagger: '.03' }, "-=.7")
tl.fromTo('.subtitle', { y: '100px', opacity: 0 }, { y: '+20', opacity: 1, duration: 1, ease: 'power4.out' }, "-=.6")


// Initializes smooth scrolling with Lenis and integrates it with GSAP's ScrollTrigger.
// Function to set up smooth scrolling.
const initSmoothScrolling = () => {
    // Initialize Lenis for smooth scroll effects. Lerp value controls the smoothness.
    const lenis = new Lenis({ lerp: 0.2 });

    // Sync ScrollTrigger with Lenis' scroll updates.
    lenis.on('scroll', ScrollTrigger.update);

    // Ensure GSAP animations are in sync with Lenis' scroll frame updates.
    gsap.ticker.add(time => {
        lenis.raf(time * 1000); // Convert GSAP's time to milliseconds for Lenis.
    });

    // Turn off GSAP's default lag smoothing to avoid conflicts with Lenis.
    gsap.ticker.lagSmoothing(0);
};

// Activate the smooth scrolling feature.
initSmoothScrolling();

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

const splitTypes = document.querySelectorAll('.reveal-type');

splitTypes.forEach((char, i) => {

    const text = new SplitType(char, {
        types: 'chars,words'
    });

    gsap.from(text.chars, {
        scrollTrigger: {
            trigger: char,
            start: 'top 80%',
            end: 'top 20%',
            scrub: true
        },
        opacity: 0.2,
        stagger: 0.1
    })

});
const images = document.querySelectorAll('.feature-img');
const features = document.querySelectorAll('.feature-title');

features.forEach(feature => {
    gsap.fromTo(feature,
        { fontVariationSettings: '"wght" 800' },
        {
            fontVariationSettings: '"wght" 600',
            scrollTrigger: {
                trigger: feature,
                start: "top 80%",
                end: "bottom 20%",
                scrub: true,
            }
        }
    );
});



images.forEach(images => {
    gsap.fromTo(images,
        {
            scale: .9,
            opacity: 0,
            x: '100'
        },
        {
            scale: 1,
            opacity: 1,
            x: '0',
            scrollTrigger: {
                trigger: images,
                start: "top 80%",
                end: "bottom 20%",
                scrub: true,
            }
        }
    );
});



const parallaxIns = Array.from(document.querySelectorAll(".js-parallax-in"));

parallaxIns.forEach(p => {
    gsap.fromTo(p, {
        "--yPercent": -1
    }, {
        "--yPercent": 1,
        scrollTrigger: {
            trigger: p,
            start: "top bottom",
            end: "bottom top",
            scrub: true,
        }
    });
});
