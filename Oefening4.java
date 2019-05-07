package java2;

public class Oefening4 {
	public static void main(String[] args) {
		int numrows = Integer.parseInt(args [0]);
		int numcols = Integer.parseInt(args [1]);;
		
		for(int i = 0; i <= numrows; i++) {
			System.out.print("\t");
			for(int k = 0; k <= numcols; k++) {
				System.out.print("+");
			}
			System.out.print("\n");
		}
	}	
}
