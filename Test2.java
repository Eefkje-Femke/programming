package java2;

public class Test2 {
	 public static void main(String[] args) { 
		 Scope scope = new Scope();   
		 System.out.println(scope.repeatStringHorizontal("xyz", 10));  
		 System.out.println();   
		 System.out.println(scope.repeatStringVertical("xyz", 10));
	}
}
