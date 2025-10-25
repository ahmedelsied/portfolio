import { NextPage } from 'next'
import Head from 'next/head'
import dynamic from 'next/dynamic'
import Hero from '@/components/Hero'
import About from '@/components/About'
import Projects from '@/components/Projects'
import BlogPreview from '@/components/BlogPreview'
import Contact from '@/components/Contact'
import Footer from '@/components/Footer'

// Lazy load components for better performance
const DynamicProjects = dynamic(() => import('@/components/Projects'), {
  loading: () => <div className="animate-pulse bg-gray-200 h-96 rounded-xl" />
})

const DynamicBlogPreview = dynamic(() => import('@/components/BlogPreview'), {
  loading: () => <div className="animate-pulse bg-gray-200 h-64 rounded-xl" />
})

const Home: NextPage = () => {
  return (
    <>
      <Head>
        <title>Ahmed - Backend Engineer & Tech Blogger</title>
        <meta 
          name="description" 
          content="Backend software engineer specializing in Laravel, PHP, and domain-driven design. Building scalable e-commerce and web applications." 
        />
        <meta name="keywords" content="backend engineer, Laravel, PHP, software developer, tech blogger, Ahmed" />
        <meta name="author" content="Ahmed" />
        <meta property="og:title" content="Ahmed - Backend Engineer & Tech Blogger" />
        <meta property="og:description" content="Backend software engineer specializing in Laravel, PHP, and domain-driven design." />
        <meta property="og:type" content="website" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Ahmed - Backend Engineer & Tech Blogger" />
        <meta name="twitter:description" content="Backend software engineer specializing in Laravel, PHP, and domain-driven design." />
        <link rel="canonical" href="https://ahmed-portfolio.vercel.app" />
      </Head>

      <main className="min-h-screen">
        {/* Navigation */}
        <nav className="fixed top-0 w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
          <div className="container-custom">
            <div className="flex justify-between items-center py-4">
              <div className="text-2xl font-bold text-primary-600">
                Ahmed
              </div>
              <div className="hidden md:flex space-x-8">
                <a href="#about" className="text-gray-700 hover:text-primary-600 transition-colors">About</a>
                <a href="#projects" className="text-gray-700 hover:text-primary-600 transition-colors">Projects</a>
                <a href="#blog" className="text-gray-700 hover:text-primary-600 transition-colors">Blog</a>
                <a href="#contact" className="text-gray-700 hover:text-primary-600 transition-colors">Contact</a>
              </div>
            </div>
          </div>
        </nav>

        {/* Hero Section */}
        <Hero />

        {/* About Section */}
        <section id="about" className="section-padding bg-gray-50">
          <About />
        </section>

        {/* Projects Section */}
        <section id="projects" className="section-padding">
          <DynamicProjects />
        </section>

        {/* Blog Section */}
        <section id="blog" className="section-padding bg-gray-50">
          <DynamicBlogPreview />
        </section>

        {/* Contact Section */}
        <section id="contact" className="section-padding">
          <Contact />
        </section>

        {/* Footer */}
        <Footer />
      </main>
    </>
  )
}

export default Home