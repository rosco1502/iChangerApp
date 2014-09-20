package ca.spycraft.game;

import java.awt.BorderLayout;
import java.awt.Canvas;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.image.BufferStrategy;
import java.awt.image.BufferedImage;
import java.awt.image.DataBufferInt;
import javax.swing.JFrame;

public class Game extends Canvas implements Runnable {

	private static final long serialVersionUID = 1L;
	
	public static final int WIDTH = 160;
	public static final int HEIGHT = WIDTH/12*9;
	public static final int SCALE = 3;
	public static final String NAME = "Game";

	private static final int O = 0; 
	
	private JFrame frame;
	
	public boolean running = false;
	public int tickCount = 0;
	
	private BufferedImage image = new BufferedImage(WIDTH, HEIGHT, BufferedImage.TYPE_INT_RGB);
	private int[] pixels = ((DataBufferInt) image.getRaster().getDataBuffer()).getData();
	
	public Game(){
		setMinimumSize(new Dimension(WIDTH*SCALE, HEIGHT*SCALE));
		setMaximumSize(new Dimension(WIDTH*SCALE, HEIGHT*SCALE));
		setPreferredSize(new Dimension(WIDTH*SCALE, HEIGHT*SCALE));
		
		frame = new JFrame(NAME);
		
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setLayout(new BorderLayout());
		frame.add(this,BorderLayout.CENTER);
		frame.pack();
		
		frame.setResizable(false);
		frame.setLocationRelativeTo(null);
		frame.setVisible(true);
	}
	
	public synchronized void start() {
		running = true;
		new Thread(this).start();
		
	}
	
	public synchronized void stop() {
		running = false;
	}
	
	public void run() {
		long lastTime = System.nanoTime();
		double nsPerTick = 1000000000D/60D;
		
		int frames = 0;
		int ticks = 0;
		
		long lastTimer = System.currentTimeMillis();
		double delta = 0;
		
		while (running) {
			long now = System.nanoTime();
			delta +=(now - lastTime) / nsPerTick;
			lastTime = now;
					
		boolean shouldRender = true;
		while (delta >= 1) {
			ticks++;
			tick();
			delta -= 1;
			shouldRender = true;
		}
		try {
			Thread.sleep(2);
		} catch (InterruptedException e) {
			e.printStackTrace();
		}
		if (shouldRender) {
		frames++;
		render();
		
		if (System.currentTimeMillis() - lastTimer > 1000) {
			lastTimer +=1000;
			System.out.println(ticks + "ticks," + frames + "frames");
			frames = 0;
			ticks = 0;
		}
	}}
}	
	private void tick() {
	tickCount++;
	
	for (int i=0; i<pixels.length; i++) {
		pixels[i] = i + tickCount;
	}
	}

	private void render() {
	BufferStrategy bs = getBufferStrategy();	
	if (bs == null) {
		createBufferStrategy(3);
		return;
	}
	
	Graphics g = bs.getDrawGraphics();
	g.drawImage(image,0,0,getWidth(),getHeight(),null);
	g.setColor(Color.BLACK);
	g.drawRect(0,0,getWidth(),getHeight());
	g.dispose();
	bs.show();
	}
	
	public static void main(String[]args) {
		new Game().start();
	}
}
/*
Yeah, I might be able to make you a new VM like this one but
for Java
give me a few secs
yes the terminal tab is just like cmd. 
it have javac so you can complime
Be sure to Save the file! Ctrl+S

Hello?

LOREN'S GAME v1

The error i get when i run this file...

Exception in thread "main" java.lang.NoClassDefFoundError: Game (wrong name: ca/spycraft/game/Game)
        at java.lang.ClassLoader.defineClass1(Native Method)
        at java.lang.ClassLoader.defineClass(ClassLoader.java:800)
        at java.security.SecureClassLoader.defineClass(SecureClassLoader.java:142)
        at java.net.URLClassLoader.defineClass(URLClassLoader.java:449)
        at java.net.URLClassLoader.access$100(URLClassLoader.java:71)
        at java.net.URLClassLoader$1.run(URLClassLoader.java:361)
        at java.net.URLClassLoader$1.run(URLClassLoader.java:355)
        at java.security.AccessController.doPrivileged(Native Method)
        at java.net.URLClassLoader.findClass(URLClassLoader.java:354)
        at java.lang.ClassLoader.loadClass(ClassLoader.java:425)
        at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)
        at java.lang.ClassLoader.loadClass(ClassLoader.java:358)
        at sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:482)



*/