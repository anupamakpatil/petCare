#include <stdio.h>
#include <string.h>

int main() {
    printf("Enter the pattern length: ");
    int m;
    scanf("%d", &m);
    char pat[m];
    printf("Enter the pattern: ");
    scanf("%s", pat);

    printf("Enter the text length: ");
    int n;
    scanf("%d", &n);
    char text[n];
    printf("Enter the text: ");
    scanf("%s", text);

    for(int q=2 ; q<m+1 ; q++) {
        while(k>0 && arr[k+1] != arr[q]) {
            k = pi[k];
        }
        if(arr[k+1] == arr[q]) {
            k = k+1;
        }
        pi[q] = k;
    }
    for(int i=1 ; i<m+1 ; i++) {
        printf("%d", pi[i]);
    }

    return 0;
}