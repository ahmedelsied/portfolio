import { NextPage } from 'next'
import Head from 'next/head'
import Link from 'next/link'
import { HomeIcon } from '@heroicons/react/24/outline'

const Custom404: NextPage = () => {
  return (
    <>
      <Head>
        <title>404 - Page Not Found | Ahmed</title>
        <meta name="description" content="The page you're looking for doesn't exist." />
      </Head>
      
      <div className="min-h-screen flex items-center justify-center bg-gray-50">
        <div className="text-center">
          <h1 className="text-9xl font-bold text-primary-600 mb-4">404</h1>
          <h2 className="text-3xl font-semibold text-gray-900 mb-4">
            Page Not Found
          </h2>
          <p className="text-gray-600 mb-8 max-w-md mx-auto">
            Sorry, the page you're looking for doesn't exist or has been moved.
          </p>
          <Link
            href="/"
            className="btn-primary inline-flex items-center space-x-2"
          >
            <HomeIcon className="w-5 h-5" />
            <span>Go Home</span>
          </Link>
        </div>
      </div>
    </>
  )
}

export default Custom404