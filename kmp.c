#include <stdio.h>

int main() {
    printf("Enter the pattern length: ");
    int m;
    scanf("%d", &m);
    int arr[m+1];
    for(int i=1 ; i<m+1 ; i++) {
        scanf("%d", &arr[i]);
    }
    int pi[m+1];
    pi[1] = 0;
    int k = 0;

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

    printf("Enter the text length: ");
    int n;
    scanf("%d", &n);
    printf("Enter the text\n");
    int text[n+1];
    for(int i=1 ; i<n+1 ; i++) {
        scanf("%d", &text[i]);
    }

    int q=0;

    for(int i=1 ; i<n+1 ; i++) {
        while(q>0 && arr[q+1] != text[i]) {
            q = pi[q];
        }
        if(arr[q+1] == text[i]) {
            q = q+1;
        }
        if(q==m) {
            printf("Pattern occurs with shift %d", i-m);
            q = pi[q];
        }
    }
    return 0;
}