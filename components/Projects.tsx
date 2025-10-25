import { motion } from 'framer-motion'
import { useInView } from 'react-intersection-observer'
import Image from 'next/image'
import { ExternalLinkIcon, CodeBracketIcon } from '@heroicons/react/24/outline'

const Projects = () => {
  const [ref, inView] = useInView({
    triggerOnce: true,
    threshold: 0.1
  })

  const projects = [
    {
      id: 1,
      title: "E-Commerce Platform",
      description: "A full-featured e-commerce platform built with Laravel 10, featuring multi-vendor support, payment integration, and advanced inventory management.",
      image: "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop",
      tech: ["Laravel", "PHP 8.2", "MySQL", "Vue.js", "Stripe API", "Redis"],
      liveUrl: "https://demo-ecommerce.vercel.app",
      githubUrl: "https://github.com/ahmed/ecommerce-platform",
      featured: true
    },
    {
      id: 2,
      title: "Microservices API Gateway",
      description: "A scalable API gateway managing multiple microservices with authentication, rate limiting, and load balancing capabilities.",
      image: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=400&fit=crop",
      tech: ["Laravel", "Docker", "Nginx", "Redis", "JWT", "AWS"],
      liveUrl: "https://api-gateway.vercel.app",
      githubUrl: "https://github.com/ahmed/api-gateway",
      featured: true
    },
    {
      id: 3,
      title: "Real-time Chat Application",
      description: "A real-time chat application with WebSocket support, file sharing, and group messaging capabilities.",
      image: "https://images.unsplash.com/photo-1577563908411-5077b6dc7624?w=600&h=400&fit=crop",
      tech: ["Laravel", "WebSockets", "Pusher", "Vue.js", "MySQL", "Redis"],
      liveUrl: "https://chat-app.vercel.app",
      githubUrl: "https://github.com/ahmed/chat-app",
      featured: false
    },
    {
      id: 4,
      title: "Content Management System",
      description: "A headless CMS built with Laravel and GraphQL, designed for managing content across multiple platforms.",
      image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop",
      tech: ["Laravel", "GraphQL", "PostgreSQL", "Docker", "AWS S3", "Elasticsearch"],
      liveUrl: "https://cms-demo.vercel.app",
      githubUrl: "https://github.com/ahmed/laravel-cms",
      featured: false
    },
    {
      id: 5,
      title: "Analytics Dashboard",
      description: "A comprehensive analytics dashboard for tracking application performance, user behavior, and business metrics.",
      image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop",
      tech: ["Laravel", "Chart.js", "MySQL", "Redis", "Cron Jobs", "API"],
      liveUrl: "https://analytics-demo.vercel.app",
      githubUrl: "https://github.com/ahmed/analytics-dashboard",
      featured: false
    }
  ]

  const containerVariants = {
    hidden: { opacity: 0 },
    visible: {
      opacity: 1,
      transition: {
        staggerChildren: 0.2
      }
    }
  }

  const itemVariants = {
    hidden: { opacity: 0, y: 30 },
    visible: {
      opacity: 1,
      y: 0,
      transition: { duration: 0.6 }
    }
  }

  return (
    <div ref={ref} className="container-custom">
      <motion.div
        variants={containerVariants}
        initial="hidden"
        animate={inView ? "visible" : "hidden"}
      >
        {/* Section Header */}
        <motion.div variants={itemVariants} className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">
            Featured Projects
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Here are some of my recent projects that showcase my expertise in 
            backend development, API design, and modern web technologies.
          </p>
        </motion.div>

        {/* Projects Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {projects.map((project, index) => (
            <motion.div
              key={project.id}
              variants={itemVariants}
              className={`card p-6 group ${project.featured ? 'lg:col-span-2' : ''}`}
            >
              {/* Project Image */}
              <div className="relative mb-6 overflow-hidden rounded-lg">
                <Image
                  src={project.image}
                  alt={project.title}
                  width={600}
                  height={400}
                  className="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                />
                <div className="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                  <div className="opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex space-x-2">
                    {project.liveUrl && (
                      <a
                        href={project.liveUrl}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="bg-white text-gray-900 p-2 rounded-full hover:bg-primary-600 hover:text-white transition-colors"
                      >
                        <ExternalLinkIcon className="w-5 h-5" />
                      </a>
                    )}
                    {project.githubUrl && (
                      <a
                        href={project.githubUrl}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="bg-white text-gray-900 p-2 rounded-full hover:bg-primary-600 hover:text-white transition-colors"
                      >
                        <CodeBracketIcon className="w-5 h-5" />
                      </a>
                    )}
                  </div>
                </div>
              </div>

              {/* Project Content */}
              <div className="space-y-4">
                <h3 className="text-xl font-semibold text-gray-900 group-hover:text-primary-600 transition-colors">
                  {project.title}
                </h3>
                
                <p className="text-gray-600 leading-relaxed">
                  {project.description}
                </p>

                {/* Tech Stack */}
                <div className="flex flex-wrap gap-2">
                  {project.tech.map((tech) => (
                    <span
                      key={tech}
                      className="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-md"
                    >
                      {tech}
                    </span>
                  ))}
                </div>

                {/* Action Buttons */}
                <div className="flex space-x-3 pt-2">
                  {project.liveUrl && (
                    <a
                      href={project.liveUrl}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="flex items-center space-x-1 text-primary-600 hover:text-primary-700 font-medium text-sm transition-colors"
                    >
                      <ExternalLinkIcon className="w-4 h-4" />
                      <span>Live Demo</span>
                    </a>
                  )}
                  {project.githubUrl && (
                    <a
                      href={project.githubUrl}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="flex items-center space-x-1 text-gray-600 hover:text-gray-700 font-medium text-sm transition-colors"
                    >
                      <CodeBracketIcon className="w-4 h-4" />
                      <span>Source Code</span>
                    </a>
                  )}
                </div>
              </div>
            </motion.div>
          ))}
        </div>

        {/* View More Button */}
        <motion.div variants={itemVariants} className="text-center mt-12">
          <a
            href="https://github.com/ahmed"
            target="_blank"
            rel="noopener noreferrer"
            className="btn-secondary inline-flex items-center space-x-2"
          >
            <CodeBracketIcon className="w-5 h-5" />
            <span>View All Projects on GitHub</span>
          </a>
        </motion.div>
      </motion.div>
    </div>
  )
}

export default Projects