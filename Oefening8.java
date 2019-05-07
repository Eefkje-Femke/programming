package java2;

public class Oefening8 {
	 
	public static void main(String[] args) {
		String arg = (args [0]);			
		Test x = new Test();
		
		System.out.println(x.containsNumbers(arg)); 
		System.out.println("\n" + x.getNumbers(arg));
	}	
}

