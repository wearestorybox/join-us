About You.
1)
I am dilna working as a software developer in opine infotech . I have 1.10 years of in spring mvc and codeigniter mvc.  My responsibility including both designing and development. 
I completed my MCA post graduation in manglore. 
My short term goal is to be a good worker to the company, and the long term goal is to take a respectable place in the company.
My  strength I  am very much dedicated to my work and quick learner and I like to take challenge that I can do it. 
My weakness is am little shy when I am talking.

2)OS : windows
IDE : visual Studio Code

Social Profile
1)
https://github.com/dilnamohan

The real stuff.

1)
Spring mvc, hibernate, angular, php codeigniter
2)
void main()
{
	int num=0;
	int temp[100];
	int i=0;
	
	printf("Enter the number");
	scanf("%i",&num);

	while(num >= 1)
	{
		temp[i] = num%10;
		num/=10;
		i++;
	}
	return temp;
}

3)
#include <iostream>
using namespace std; 
  
bool isVowel(char c) 
{ 
    return (c == 'A' || c == 'E' || c == 'I' ||  
            c == 'O' || c == 'U' || c == 'a' ||  
            c == 'e' || c == 'i' || c == 'o' || 
            c == 'u'); 
} 
  
string pigLatin(string s) 
{ 
    int len = s.length(); 
    int index = -1; 
    for (int i = 0; i < len; i++) { 
        if (isVowel(s[i])) { 
            index = i; 
            break; 
        } 
    } 
  
    if (index == -1) 
        return "-1"; 
  
    return s.substr(index) + s.substr(0, index) + "ay"; 
} 
  
int main() 
{ 
    string str = pigLatin("join with storybox"); 
    if (str == "-1") 
        cout << "No vowels found. Pig Latin not possible"; 
    else
        cout << str; 
} 





4)

#include <stdio.h> 
  

void RotatebyOne(int abc[], int n); 
  
void Rotate(int abc[], int d, int n) 
{ 
    int i; 
    for (i = 0; i < d; i++) 
        RotatebyOne(abc, n); 
} 
  
void RotatebyOne(int abc[], int n) 
{ 
    int temp = abc[0], i; 
    for (i = 0; i < n - 1; i++) 
        abc[i] = abc[i + 1]; 
    abc[i] = temp; 
} 
  

void printArray(int abc[], int n) 
{ 
    int i; 
    for (i = 0; i < n; i++) 
        printf("%d ", abc[i]); 
} 
  

int main() 
{ 
    int abc[] = { 1, 2, 3, 4, 5, 6 }; 
    Rotate(abc, 2, 6); 
    printArray(abc, 6); 
    return 0; 
} 

