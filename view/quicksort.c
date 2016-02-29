#include <bits/stdc++.h>
using namespace std; 

void print(vector <int>  ar){
   for(int i=0;i<ar.size();i++){
       cout<<ar.at(i)<<" ";       
   }
}

void quickSort(vector <int> & ar) {
   // Enter code for partitioning and printing here. 
   if(ar.size()==1){
       
   }
   else{
       vector <int>  left,equal,right,hasil;
       for(int i=0;i<ar.size();i++){
           if(ar.at(i)==ar.at(0)) {
               equal.push_back(ar.at(i));
           }   
           else if(ar.at(i)>ar.at(0)) {
               right.push_back(ar.at(i));
           }   
           else{
               left.push_back(ar.at(i));
           }
       }
       quickSort(left);
       quickSort(right);]
       ar.clear();
       ar.reserve( left.size() + equal.size()+ right.size());
       ar.insert( ar.end(), left.begin(), left.end() );
       ar.insert( ar.end(), equal.begin(), equal.end() );  
       ar.insert( ar.end(), right.begin(), right.end() ); 
       print(ar);
       cout<<endl;
   }
}

int main()
{
    int n;
    cin >> n;
    vector <int> arr(n);
    for(int i = 0; i < (int)n; ++i) {
        cin >> arr[i];
    }
    quickSort(arr);
    //print(arr);
    return 0;
}