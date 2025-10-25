import { motion } from 'framer-motion'
import { useInView } from 'react-intersection-observer'
import Image from 'next/image'

const About = () => {
  const [ref, inView] = useInView({
    triggerOnce: true,
    threshold: 0.1
  })

  const skills = [
    'PHP', 'Laravel', 'MySQL', 'API Design', 'Microservices', 
    'AWS', 'Docker', 'Redis', 'Domain-Driven Design', 'E-commerce',
    'REST APIs', 'GraphQL', 'PostgreSQL', 'MongoDB', 'Git'
  ]

  const containerVariants = {
    hidden: { opacity: 0 },
    visible: {
      opacity: 1,
      transition: {
        staggerChildren: 0.1
      }
    }
  }

  const itemVariants = {
    hidden: { opacity: 0, y: 20 },
    visible: {
      opacity: 1,
      y: 0,
      transition: { duration: 0.5 }
    }
  }

  return (
    <div ref={ref} className="container-custom">
      <motion.div
        variants={containerVariants}
        initial="hidden"
        animate={inView ? "visible" : "hidden"}
        className="grid lg:grid-cols-2 gap-12 items-center"
      >
        {/* Image Section */}
        <motion.div variants={itemVariants} className="order-2 lg:order-1">
          <div className="relative">
            <div className="absolute inset-0 bg-gradient-to-r from-primary-400 to-accent-400 rounded-2xl transform rotate-3"></div>
            <div className="relative bg-white p-2 rounded-2xl shadow-2xl">
              <Image
                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop&crop=face"
                alt="Ahmed - Backend Engineer"
                width={500}
                height={600}
                className="rounded-xl object-cover w-full h-auto"
                priority
              />
            </div>
          </div>
        </motion.div>

        {/* Content Section */}
        <motion.div variants={itemVariants} className="order-1 lg:order-2">
          <h2 className="text-4xl font-bold text-gray-900 mb-6">
            About Me
          </h2>
          
          <div className="space-y-6 text-gray-600 leading-relaxed">
            <p>
              I'm a passionate backend software engineer with over 5 years of experience 
              building robust, scalable applications. I specialize in Laravel 9/10 and PHP 8.1/8.2/11, 
              with a strong focus on domain-driven design principles.
            </p>
            
            <p>
              My expertise spans across e-commerce platforms, mobile & web applications, 
              and microservices architecture. I love solving complex problems and creating 
              clean, maintainable code that stands the test of time.
            </p>
            
            <p>
              When I'm not coding, you'll find me writing technical blog posts, 
              contributing to open-source projects, or exploring new technologies 
              in the ever-evolving world of backend development.
            </p>
          </div>

          {/* Skills Section */}
          <motion.div variants={itemVariants} className="mt-8">
            <h3 className="text-xl font-semibold text-gray-900 mb-4">
              Technical Skills
            </h3>
            <div className="flex flex-wrap gap-2">
              {skills.map((skill, index) => (
                <motion.span
                  key={skill}
                  variants={itemVariants}
                  className="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm font-medium hover:bg-primary-200 transition-colors cursor-default"
                  style={{ transitionDelay: `${index * 0.05}s` }}
                >
                  {skill}
                </motion.span>
              ))}
            </div>
          </motion.div>

          {/* CTA Buttons */}
          <motion.div variants={itemVariants} className="mt-8 flex flex-col sm:flex-row gap-4">
            <a
              href="#projects"
              className="btn-primary text-center"
            >
              View My Projects
            </a>
            <a
              href="#contact"
              className="btn-secondary text-center"
            >
              Get In Touch
            </a>
          </motion.div>
        </motion.div>
      </motion.div>
    </div>
  )
}

export default About