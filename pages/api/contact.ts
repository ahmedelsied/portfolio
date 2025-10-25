import { NextApiRequest, NextApiResponse } from 'next'

export default async function handler(req: NextApiRequest, res: NextApiResponse) {
  if (req.method !== 'POST') {
    return res.status(405).json({ message: 'Method not allowed' })
  }

  const { name, email, message } = req.body

  // Basic validation
  if (!name || !email || !message) {
    return res.status(400).json({ message: 'Missing required fields' })
  }

  // Email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  if (!emailRegex.test(email)) {
    return res.status(400).json({ message: 'Invalid email format' })
  }

  try {
    // In a real application, you would:
    // 1. Send an email using a service like SendGrid, Nodemailer, or Resend
    // 2. Save the message to a database
    // 3. Send a notification to the site owner
    
    // For now, we'll just simulate a successful response
    console.log('Contact form submission:', { name, email, message })
    
    // Simulate processing time
    await new Promise(resolve => setTimeout(resolve, 1000))
    
    res.status(200).json({ 
      message: 'Message sent successfully!',
      success: true 
    })
  } catch (error) {
    console.error('Contact form error:', error)
    res.status(500).json({ 
      message: 'Failed to send message. Please try again.',
      success: false 
    })
  }
}