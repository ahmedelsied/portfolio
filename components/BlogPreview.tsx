import { motion } from 'framer-motion'
import { useInView } from 'react-intersection-observer'
import Image from 'next/image'
import { CalendarIcon, ArrowRightIcon } from '@heroicons/react/24/outline'

const BlogPreview = () => {
  const [ref, inView] = useInView({
    triggerOnce: true,
    threshold: 0.1
  })

  const blogPosts = [
    {
      id: 1,
      title: "Building Scalable APIs with Laravel and Domain-Driven Design",
      excerpt: "Learn how to structure your Laravel applications using DDD principles to create maintainable and scalable APIs that can grow with your business needs.",
      image: "https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&h=300&fit=crop",
      date: "2024-01-15",
      readTime: "8 min read",
      category: "Backend Development",
      url: "https://blog.ahmed.dev/laravel-ddd-apis"
    },
    {
      id: 2,
      title: "Microservices Architecture: Best Practices and Common Pitfalls",
      excerpt: "A comprehensive guide to implementing microservices with Laravel, covering service communication, data consistency, and deployment strategies.",
      image: "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&h=300&fit=crop",
      date: "2024-01-08",
      readTime: "12 min read",
      category: "Architecture",
      url: "https://blog.ahmed.dev/microservices-laravel"
    },
    {
      id: 3,
      title: "Optimizing PHP Performance: From Code to Infrastructure",
      excerpt: "Deep dive into PHP performance optimization techniques, from code-level improvements to infrastructure scaling strategies for high-traffic applications.",
      image: "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=600&h=300&fit=crop",
      date: "2024-01-01",
      readTime: "10 min read",
      category: "Performance",
      url: "https://blog.ahmed.dev/php-performance-optimization"
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

  const formatDate = (dateString: string) => {
    const date = new Date(dateString)
    return date.toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    })
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
            Latest Blog Posts
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            I write about backend development, software architecture, and the latest 
            trends in web technology. Here are my most recent articles.
          </p>
        </motion.div>

        {/* Blog Posts Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          {blogPosts.map((post, index) => (
            <motion.article
              key={post.id}
              variants={itemVariants}
              className="card p-6 group hover:shadow-2xl transition-all duration-300"
            >
              {/* Post Image */}
              <div className="relative mb-6 overflow-hidden rounded-lg">
                <Image
                  src={post.image}
                  alt={post.title}
                  width={600}
                  height={300}
                  className="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                />
                <div className="absolute top-4 left-4">
                  <span className="px-3 py-1 bg-primary-600 text-white text-sm font-medium rounded-full">
                    {post.category}
                  </span>
                </div>
              </div>

              {/* Post Content */}
              <div className="space-y-4">
                <h3 className="text-xl font-semibold text-gray-900 group-hover:text-primary-600 transition-colors line-clamp-2">
                  {post.title}
                </h3>
                
                <p className="text-gray-600 leading-relaxed line-clamp-3">
                  {post.excerpt}
                </p>

                {/* Post Meta */}
                <div className="flex items-center justify-between text-sm text-gray-500 pt-4 border-t border-gray-100">
                  <div className="flex items-center space-x-4">
                    <div className="flex items-center space-x-1">
                      <CalendarIcon className="w-4 h-4" />
                      <span>{formatDate(post.date)}</span>
                    </div>
                    <span>{post.readTime}</span>
                  </div>
                </div>

                {/* Read More Link */}
                <a
                  href={post.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="inline-flex items-center space-x-1 text-primary-600 hover:text-primary-700 font-medium group-hover:translate-x-1 transition-all duration-200"
                >
                  <span>Read More</span>
                  <ArrowRightIcon className="w-4 h-4" />
                </a>
              </div>
            </motion.article>
          ))}
        </div>

        {/* View All Posts Button */}
        <motion.div variants={itemVariants} className="text-center">
          <a
            href="https://blog.ahmed.dev"
            target="_blank"
            rel="noopener noreferrer"
            className="btn-secondary inline-flex items-center space-x-2"
          >
            <span>View All Posts</span>
            <ArrowRightIcon className="w-5 h-5" />
          </a>
        </motion.div>
      </motion.div>
    </div>
  )
}

export default BlogPreview