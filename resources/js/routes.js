import Home from './components/pages/Home';
import Projects from './components/pages/Projects';
import Project from './components/pages/Project';
import About from './components/pages/AboutMe';
import Contact from './components/pages/Contact';

export const routes = [{
        path: '/',
        component: Home,
        name: 'home'
    },
    {
        path: '/projects',
        component: Projects,
        name: 'projects'
    },
    {
        path: '/project/:title',
        component: Project,
        name: 'project',
        props: true
    },
    {
        path: '/about',
        component: About,
        name: 'about'
    },
    {
        path: '/contact',
        component: Contact,
        name: 'contact'
    },

];