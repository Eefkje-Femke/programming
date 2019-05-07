package java2;

public class Oefening5 {
	public static void main(String[] args) {
		int[] num = new int[]{2, 8, 5, 7, 15, 83, 74, 24};
		int max = getMax(num);
		System.out.print("Maximum Value: " + max);
	}
	
	 public static int getMax(int[] num) {
		int maxValue = num[0];
		for(int i = 1; i < num.length; i++) {
			if(num[i] > maxValue) {
				maxValue = num[i];
			}
		}
		return maxValue;
	 }
}
